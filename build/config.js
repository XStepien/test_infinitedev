module.exports = {
  entry: {
    app: ['./css/app.scss', './js/app.js']
  },
  port: 3003,
  html: false,
  assets_url: '/public/',  // Urls dans le fichier final
  assets_path: './public/', // ou build ?
  refresh: ['./index.php', './js/components/**/*.vue'] // Permet de forcer le rafraichissement du navigateur lors de la modification de ces fichiers
}
