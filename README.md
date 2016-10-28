# test_infinitedev

## Initialisation du projet :

`npm install`  
`composer dump-autoload`  
`docker-compose up -d`  
`npm run dev`  

Le serveur php se situe sur localhost:8888 et le serveur webpack sur localhost:3003

En cas de changement de port modifier:  
js/app.js pour l'appelle de l'api  
`Vue.http.options.root = 'http://localhost:XXXX/api'`
