## Cara Instalasi (tanpa Docker):

- Clone repository
- Jalankan perintah `php yii migrate` untuk membuat tabel-tabel yang dibutuhkan
- Buat database dengan nama `db_profiledata` di MySQL
- Jalankan perintah `php yii serve` untuk menjalankan server
- Server akan berjalan di `localhost:8000`

## Cara Instalasi (dengan Docker):

- Clone repository
- Gunakan konfigurasi di db.php bagian `for docker` untuk mengatur koneksi ke database
- Jalankan perintah `docker exec -it yii-app php yii migrate` untuk membuat tabel-tabel yang dibutuhkan
- Jalankan perintah `docker-compose up --build` untuk menjalankan server
- Server akan berjalan di `localhost:8000`


## Cara Penggunaan API:
### Create a new contact profile:

```markdown
POST /contact-profiles
```

### Get a list of contact profiles:
```markdown
`GET /contact-profiles`
```

### Get details of a specific contact profile:

```markdown
GET /contact-profiles/{id}
```

### Update a contact profile:

```mardown
PUT /contact-profiles/{id}
```

### Delete a contact profile:
```markdown
DELETE /contact-profiles/{id}
```