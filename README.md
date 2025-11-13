# Management Product - Project Documentation

### Database SetUp
```bash
# Membuat database beserta memasukkan data
php artisan migrate:fresh --seed

php artisan serve

# raw data JSON
{
  "product_id": 1,
  "quantity": 2
}

# ACC ENDPOINT
POST http://127.0.0.1:8000/api/transactions

```

## 📄 PDF Reference

[Download PDF Hasil ENDPOINT POST](https://raw.githubusercontent.com/clatan/backend-dev/main/docs/HasilPOST.pdf)
