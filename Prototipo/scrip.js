
    app.get('/datos', (req, res) => {
      db.any('SELECT * FROM public."Administrador"')
        .then(data => {
          res.send(`
                  <html>
                  <body>
                      <h1>Datos desde PostgreSQL:</h1>
                      <pre>${JSON.stringify(data, null, 2)}</pre>
                  </body>
                  </html>
              `);
        })
    });