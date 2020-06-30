<!DOCTYPE html>
<html>
    <head>
        <body>
            <div>
                <h3>Buat Account Baru!</h3>
                <h4>Sign Up Form</h4>
            </div>
            
            <div>
                <form action="/selamat" method="POST">
                    <label for="">First Name:</label> <br><br>
                    <input type="text" name ="nama_depan"> <br><br>
                    <label for="">Last Name:</label> <br><br>
                    <input type="text" name ="nama_belakang"> <br><br>

                    <label for="">Gender:</label><br><br>
                    <input type="radio" name="gender">Male<br>
                    <input type="radio" name="gender">Female<br>
                    <input type="radio" name="gender">Other<br><br>

                    <label for="">Nationality:</label><br><br>
                    <select>
                        <option>Indonesian</option>
                        <option>Singapuran</option>
                        <option>Malaysian</option>
                        <option>Australian</option>
                    </select><br><br>

                    <label for="">Language Spoken:</label><br><br>
                    <input type="checkbox">Bahasa Indonesia<br>
                    <input type="checkbox">English<br>
                    <input type="checkbox">Other<br><br>

                    <label for="">Bio:</label><br><br>
                    <textarea cols="25" rows="7"></textarea><br>
                </form>

                <form action="/selamat">
                    <input type="submit" value="Sign Up">
                </form>
            </div>
        </body>
    </head>
</html>