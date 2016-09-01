module.exports = {
      productionBuild: {
        src: 'js/production.js',
        dest: 'js/production.min.js'
      },
      vendorBuild: {
        src: 'js/vendor/*.js',
        dest: 'js/vendor.min.js'
      }
}