const laravelNuxt = require("laravel-nuxt");

module.exports = laravelNuxt({
    components: true,
    modules: [],
    plugins: ["~/plugins/vue-icon.js"],
    buildModules: ["@nuxt/postcss8"],
    build: {
        postcss: {
            plugins: {
                tailwindcss: {},
                autoprefixer: {},
            },
        },
    },
    css: ["@/assets/css/main.css"],
    loading: {
        color: '#0096FF',
        height: '5px'
      }
});
