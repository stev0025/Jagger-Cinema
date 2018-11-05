To initialize database, execute the following in order:
```

1. db_init.sql
2. seed_movie.sql
3. seed_customers.sql
4. 
```

### Movies table
| Column | Data type | Key |
| --- | --- | --- |
| id | int(10) | Primary |
| title | varchar(50) |  |
| pict  | char(10) |  |
| description | text |  |
| detail1 | text |  |
| detail2 | text |  |

### Customers table
| Column | Data type | Key |
| --- | --- | --- |
| id | int(10) | Primary |
| name | varchar(50) |  |
| salutation  | varchar(10) |  |
| password | varchar(50) |  |
| email | varchar(50) |  |
| phonenumber | int(20) |  |

### Orders table
| Column | Data type | Key |
| --- | --- | --- |
| id | int(10) | Primary |
| title | varchar(50) |  |
| email  | varchar(50) |  |
| seat | int(5) |  |
| dayofweek | varchar(20) |  |
| timing | varchar(20) |  |
| nameCustomer | varchar(100) |  |
| payment | varchar(20) |  |

### Availability table
| Column | Data type | Key |
| --- | --- | --- |
| id | int(10) | Primary |
| title | varchar(50) |  |
| dayofweek  | varchar(50) |  |
| timing | varchar(100) |  |
| seatcode | int(6) |  |
| bookingstatus | varchar(50) |  |