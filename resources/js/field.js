Nova.booting((Vue, router, store) => {
  Vue.component('index-redirect', require('./components/IndexField'))
  Vue.component('detail-redirect', require('./components/DetailField'))
  Vue.component('form-redirect', require('./components/FormField'))
})
