
    document.write('<script type="text/javascript" src="http://feeds.financialcontent.com/JSQuote?Ticker=COPPER+EWS+aud/usd" ></script>');

    function updateQuotes(data) {
        for (ticker in quote) {
         var symbol = quote[ticker];

         document.getElementById('quotes').innerHTML =('<p><b>' + symbol['Name'] + '</b><br>' + ' Last Price USD $ ' + symbol['Last'] + '<br>' +' Change % ' + symbol['ChangePercent'] +  '</p>');
        }
       };


