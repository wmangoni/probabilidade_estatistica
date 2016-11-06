var loop = new Vue({
  el: '#loop',
  data: {
    cols: [
        { title: 'Meu titulo 1', text: '1 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.', link: 'Detalhes' },
        { title: 'Meu titulo 2', text: '2 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.', link: 'Detalhes' },
        { title: 'Meu titulo 3', text: '3 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.', link: 'Detalhes' }
    ]
  },
  methods: {
    add_msg: function (x) {
      //console.log(x.link);
      alert(x.title);
    }
  }
})
