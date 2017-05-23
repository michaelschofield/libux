<?php get_header(); ?>

<div ng-app="lxQuotes">

  <section class="lx-quote" ng-controller="QuoteController as qc">

    <blockquote class="lx-quote__blockquote" ng-repeat="quote in qc.quotes">

      <p>{{quote.quote}}</p>

      <cite class="lx-quote__citation">&mdash; {{ quote.attribution }}
        <a href="{{ quote.url }}" class="lx-quote__citation__source">{{ quote.source }}</a>
      </cite>
    </blockquote>

    <button class="button" ng-click="qc.pullQuote()">New Quote</button>

  </section>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script type="text/javascript">
var lxQuotes = angular.module( 'lxQuotes', [] );

(function () {

'use strict';

var dataService = function( $http, $q ) {
  this.$http = $http;
  this.$q = $q;
};

dataService.$inject = [ '$http', '$q' ];

/**
 * Creates a "pullQuote" dataService that, right now,
 * is just grabbing random posts.
 */
dataService.prototype.pullQuote = function() {

  var _this = this;

  return _this.$http.get( 'http://libux.co/wp-json/quotes/v2/quote?nocache=1' )
    .then( function( response ) {
      if ( typeof response.data === 'object' ) {
        return response.data;
      }
    }, function( response ) {
    return _this.$q.reject(response.data);
  })
};

/**
 * Creates the QuoteController,
 */
var QuoteController = function( dataService ) {

  var vm = this;
  var pullQuote = function() {

    dataService.pullQuote().then( function( data ) {

      if ( data ) {
        vm.quotes = data;
      }
    });

  }

  pullQuote();
  vm.pullQuote = pullQuote;
}

QuoteController.$inject = [ 'dataService' ];

angular
  .module( 'lxQuotes' )
  .controller( 'QuoteController', QuoteController )
  .service( 'dataService', dataService );

})();
</script>

<?php get_footer(); ?>
