# BlOGGY.COM
Blog Post website Using HTML, CSS, PHP, SQL Database.
- group project (CE135 DHRUV,CE088 NILKANTH,CE089 PRATHAM)
- This is website for Blog Post with functionalities like search Among Posts, CRUD Operation on blog post, User Authentication and Authorization.
### INSTALLATION
- Clone this repository. 
- Then create database using `.sql` file from `database` folder.
- Setup Project and run in Localhost
## DEMO
https://user-images.githubusercontent.com/86519206/124911721-ee8ed980-dfa1-11eb-8f36-dea1f93dbe1d.mp4
https://user-images.githubusercontent.com/86519206/124912197-81c80f00-dfa2-11eb-8d99-9e63e2d4f01a.mp4
## ABOUT PROJECT
### HOME
![Capture4](https://user-images.githubusercontent.com/86519206/124766359-b2993d00-deeb-11eb-99c4-f1452aed2c88.PNG)
- `RECENT UPLOADED ARTICLES` - this section is auto update by new uploaded articles which users and admins are upload in website

![Capture6](https://user-images.githubusercontent.com/86519206/124767414-a661af80-deec-11eb-8553-1504a9856e5c.PNG)

### SEARCH.
- It is inbuilt serch engine Using php and sql.

![Capture7](https://user-images.githubusercontent.com/86519206/124768573-a2825d00-deed-11eb-8bbc-b3c6ae8476a7.PNG)

### BLOG Post Page
![Capture5](https://user-images.githubusercontent.com/86519206/124766768-0f94f300-deec-11eb-99fa-07407deed809.PNG)

### Contact section
![Capture3](https://user-images.githubusercontent.com/86519206/124765646-06575680-deeb-11eb-93f3-0f701739bada.PNG)

## Admin Panal
### Login
![Capture8](https://user-images.githubusercontent.com/86519206/124769391-48ce6280-deee-11eb-9504-3abdc0419032.PNG)
- There are two type of users `admin` and `normal user`.
- Admin Users are able to CRUD Operations on Articles and Users.
- Normal Users Are Only able to CRUD on Articles not Authorized for CRUD on users.
- For login `USERNAME` and `PASSWORD` is require
- `PASSWORD` is encrypted with `MD5`.
- In Admin panal there is two pages 1.post section 2. Users section
### Post SECTION
![Capture9](https://user-images.githubusercontent.com/86519206/124770339-1bce7f80-deef-11eb-8e55-b27461e739db.PNG)

### ADD POS
![Capture11](https://user-images.githubusercontent.com/86519206/124772803-33a70300-def1-11eb-815b-cb53278179e5.PNG)

### USERS SECTION
- This is only for those users who has registered as Admin.
- Normal Users are not Authorized for this section.
![Capture10](https://user-images.githubusercontent.com/86519206/124771620-1faed180-def0-11eb-83d4-62923cfd97b5.PNG)

### ADD USER
![Capture12](https://user-images.githubusercontent.com/86519206/124773754-145ca580-def2-11eb-861e-0ce3da2f7cb2.PNG)

- By click on `LogOut` we back to login page
- And if someone press back botton than he/she not redirect to last page . it is all because of using sessions.

