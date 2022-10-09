document.addEventListener("DOMContentLoaded", function () {
  new TypeIt("#AboutTitle", {
    strings: 'What we do',
    speed: 50,
    startDelay: 900,
    waitUntilVisible: true,
    afterComplete: function (instance) {
      instance.destroy();
    }
  })
  .go();

  new TypeIt('#AboutTitle1', {
    speed: 10,
    startDelay: 2000,
    strings: ['Mill Point Fund focuses on managed futures using technical analysis to have above average returns during unpredictable market conditions.'],
    afterComplete: (instance) => {
      instance.destroy();
      new TypeIt('#AboutTitle2', {
        speed: 10,
        startDelay: 400,
        strings: ['Main Strategy: Global Macro','Secondary Strategy: Trend Following'],
        afterComplete: (instance) => {
          instance.destroy();
          new TypeIt('#Statistics1', {
            speed: 10,
            startDelay: 400,
            strings: 'Statistics',
            afterComplete: (instance) => {
              instance.destroy();
              new TypeIt('#Statistics2', {
                speed: 10,
                startDelay: 400,
                strings: ['Annualised Return (%) N/A','2022 Return (%) N/A','2021 Return (%) 14.91','Last 3 Months (%) 11.63','Best Monthly Return (%) 47.74',"Worst Monthly Return (%) -45.95"],
              }).go();
            }
          }).go();
        }
      }).go();
    }
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


