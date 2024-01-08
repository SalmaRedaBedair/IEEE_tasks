# offline session notes
## fields
- is a columns 
## record
- is a row
## between 
- between certain range
```sql
select * from users where salary Between 50000 and 70000
```
- first number must be smaller than the second 
- if you swap that two numbers it will not return the answer
## like
- search for pattern
```sql
select * from customer where name like 's%'
```
## in
- to specify multible values in column
- take place of or in where clause
```sql
select * from customers where city in ('Paris','London')
```
## null 
- it is not possible to test null with comperation operators like >, <, =, <>
- we use `is null` and `is not null` instead
## limit
- The LIMIT clause is used to specify the number of records to return.
- The  LIMIT clause is useful on large tables with thousands of records. 
- Returning a large number of records can impact performance.
```sql
select * from customer where city='London' limit 3
```
