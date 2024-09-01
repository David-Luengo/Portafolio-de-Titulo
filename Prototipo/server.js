
const pgp = require('pg-promise')();
const db = pgp({
    host: 'localhost',
    port: 5432,
    database: 'Proyecto_Titulo',
    user: 'postgres',
    password: '123456'
});

db.any('SELECT * FROM public."Administrador"')
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.log(error);
    });




    const express = require('express');
    const app = express();
    const port = 3000;
    
    app.get('/', (req, res) => {
        res.send('Hola desde tu aplicación con conexión a PostgreSQL!');
    });
    
    app.listen(port, () => {
        console.log(`Aplicación corriendo en http://localhost:${port}`);
    });
    