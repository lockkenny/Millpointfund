document.addEventListener("DOMContentLoaded", function () {
  new TypeIt('#AboutTitle', {
    speed: 10,
    startDelay: 2000,
    strings: ["<span style='font-size: 250%;'>"+'What we do'+"</span>","\n","Mill Point Fund manages derivatives using technical analysis to have above-average returns during unpredictable market conditions. This displays my performance and insights."],
    afterComplete: function (instance) {
      instance.destroy();
    }
  })
  .go();

  new TypeIt('#Statistics', {
    speed: 10,
    startDelay: 2000,
    waitUntilVisible: true,
    strings: ["<span style='font-size: 50px;'>"+'Strategies'+"</span>",'Main: Global Macro','Secondary: Trend Following',"\n","<span style='font-size: 50px;'>"+'Statistics'+"</span>",'Annualised Return (%) N/A','2022 Return (%) N/A','2021 Return (%) 14.91','Last 3 Months (%) 11.63','Best Monthly Return (%) 47.74',"Worst Monthly Return (%) -45.95"],
  }).go();

  new TypeIt('#Risks', {
    speed: 10,
    startDelay: 2000,
    waitUntilVisible: true,
    strings: ["<span style='font-size: 50px;'>"+'Risk/Return'+"</span>",'Annualised Standard Deviation (%) N/A','Downside Deviation (%) N/A','Upside Deviation (%) N/A','Maximum Drawdown (%) N/A','Sharpe Ratio N/A','Sortino Ratio N/A','Percentage of Positive Months (%) N/A'],
  }).go();

  new TypeIt("#Returns", {
    strings: "ANNUAL PERFORMANCE - <strong>TOTAL RETURN (%)</strong>",
    speed: 50,
    startDelay: 900,
    waitUntilVisible: true,
    afterComplete: function (instance) {
      instance.destroy();
    }
  })
  .go();

  new TypeIt("#Sectors", {
    strings: "SECTOR <strong>WEIGHTS</strong>",
    speed: 50,
    startDelay: 900,
    waitUntilVisible: true,
    afterComplete: function (instance) {
      instance.destroy();
    }
  })
  .go();

  new TypeIt("#AboutOpt", {
    strings: "Operations",
    speed: 50,
    startDelay: 900,
    waitUntilVisible: true,
    afterComplete: function (instance) {
      instance.destroy();
    }
  })
  .go();

  new TypeIt("#AboutOpt1", {
    strings: "MONTHLY - <strong>TOTAL RETURNS (%)</strong>",
    speed: 50,
    startDelay: 900,
    waitUntilVisible: true,
    afterComplete: function (instance) {
      instance.destroy();
    }
  })
  .go();

  new TypeIt("#Records", {
    strings: "TRACK - <strong>RECORDS (PRESENT - 2019)</strong>",
    speed: 50,
    startDelay: 900,
    waitUntilVisible: true,
    afterComplete: function (instance) {
      instance.destroy();
    }
  })
  .go();

  new TypeIt("#AboutInsights", {
    strings: "INSIGHTS",
    speed: 50,
    startDelay: 900,
    waitUntilVisible: true,
    afterComplete: function (instance) {
      instance.destroy();
    }
  })
  .go();
});


new TypeIt("#AboutInsights1", {
  strings: "Double Digit Returns",
  speed: 50,
  startDelay: 900,
  waitUntilVisible: true,
  afterComplete: function (instance) {
    instance.destroy();
  }
})
.go();


