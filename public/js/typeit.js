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

  new TypeIt("#AboutTitle1", {
    strings: 'Tiberium Investments focus on managed futures to have a less correlations to the world stock markets. Our strategy is to have a clear and above average returns during unpredictable market conditions. ',
    speed: 10,
    startDelay: 2000,
    waitUntilVisible: true,
    afterComplete: function (instance) {
      instance.destroy();
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


