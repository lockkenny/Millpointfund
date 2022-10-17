
    

    function updateQuotes(data) {
        for (ticker in quote) {
         var symbol = quote[ticker];

        document.write('<p><b>' + symbol['Name'] + '</b><br>' + ' Last Price USD $ ' + symbol['Last'] + '<br>' +' Change % ' + symbol['ChangePercent'] +  '</p>');
        }
       }

  
