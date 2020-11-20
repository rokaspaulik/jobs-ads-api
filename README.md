# Job Ads API

Created by Rokas Paulikas.

**EXTRA NOTE**

* Salary database field is Integer, value are EURO cents.

# How To Use

1. Create new SQL database and configure laravel .env file to use it
2. Run ```php artisan migrate```
3. Run ```php artisan db:seed```
4. Run ```php artisan passport:install```
5. Run ```php artisan serve```
6. Go to ```http://localhost:8000/``` in your browser
7. Register & login
8. Create new token
9. Authenticate using the token
10. You are now ready to test the API

# Tools Used

* Laravel 6.20.4 (LTS)
* Laravel Passport library used for JWT API authentication

# API Routes:

## JobAds

**GET**
Get all JobAd records with pagination (with optional REQUEST parameter **title** wrap in % signs to get as LIKE; without wrapping returns with exact title)
```json
http://127.0.0.1:8000/api/ads
```

---
**GET**
Get single record by id
```json
http://127.0.0.1:8000/api/ads/{id}
```

---
**POST**
Create new JobAd
```json
http://127.0.0.1:8000/api/ads

BODY:
{
    "title": "Some title",
    "description": "Some description",
    "salary": 210000,
    "area_id": 1
}
```

---
**PUT**
Update single JobAd record by id
```json
http://127.0.0.1:8000/api/ads/{id}

BODY:
{
    "title": "Updated title",
    "description": "Updated description",
    "salary": 230000,
    "area_id": 2
}
```

---
**DELETE**
Destroy single record by id
```json
http://127.0.0.1:8000/api/ads/{id}
```

## JobAdsTranslation

**GET**
Get all JobAdTranslation records with pagination
```json
http://127.0.0.1:8000/api/ads-trans
```

---
**GET**
Get single JobAdTranslation record by id
```json
http://127.0.0.1:8000/api/ads-trans/{id}
```

---
**POST**
Create new JobAdTranslation
```json
http://127.0.0.1:8000/api/ads-trans

BODY:
{
    "job_ad_id": 1,
    "language_code": "lt",
    "title": "Lietuviškas pavadinimas",
    "description": "Lietuviškas aprašymas"
}
```

---
**PUT**
Update single JobAdTranslation record by id
```json
http://127.0.0.1:8000/api/ads-trans/{id}

BODY:
{
    "job_ad_id": 1,
    "language_code": "lt",
    "title": "Atnaujintas pavadinimas",
    "description": "Atnaujintas aprašymas"
}
```

---
**DELETE**
Destroy single JobAdTranslation record by id
```json
http://127.0.0.1:8000/api/ads-trans/{id}
```
