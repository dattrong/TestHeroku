<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title></title>
    </head>
    <body>
        <form method="post">
            <table border="0" width="50%">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><input name="course"></td>
                <td>
                    <select name="course">
                        <option value="chim">chim</option>
                        <option value="cho">cho</option>
                        <option value="meo">meo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Birth</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="Male">buoi</td>
                <td><input type="radio" name="gender" value="Female">buom</td>
            </tr>
            <tr>
					<td>Favorites</td>
					<td>
						<input type="checkbox" name="porn" value="porn">Porn
						<input type="checkbox" name="hentai" value="hentai">Hentai
					</td>
            </tr>
            <tr>
				<td></td>
				<td><input type="submit" name="Register"></td>
			</tr>
                        
            </table>               
        </form>
        <?php
            $name=$_POST[name];
            $course=$_POST[course];
            $dob=$_POST[dob];
            $gender = $_POST["gender"];
	 $fav_book =$_POST["porn"];
		$fav_car = $_POST["hentai"];
		$fav = $fav_book . "," . $fav_car;
        ?>
        <h1>dkm cm luon day <?php echo $name?> for lon me cm <?php  echo $course?>;
    </h1>
    <ul>
        <li><?php echo $dob?></li>
        <li><?php echo $gender?></li>
        <li><?php echo $fav?></li>
    </ul>
         
    </body>
</html>
