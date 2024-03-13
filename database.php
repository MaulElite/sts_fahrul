<?php
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="peminjaman";

    $koneksi=mysqli_connect($host, $user, $pass, $dbname) or die("gagal terhubung dengan database: " . mysqli_error($koneksi)); 

    function tampildata($tablename)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi, "select * from $tablename");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    function tampiluser($namatabel)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi, "select * from $namatabel");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    function editdata($tablename, $id) {

        global $koneksi;
        $hasil = mysqli_query($koneksi, "select * from $tablename where id = $id");
        return $hasil;
    }

    function updatedata($tablename, $data, $id)
    {
        global $koneksi;
        $sql = "UPDATE $tablename SET peminjaman = '$data' WHERE id = '$id'";
        $hasil=mysqli_query($koneksi, $sql);
        return $hasil;
    }

    function deletedata($tablename, $id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi, "delete from $tablename where id = '$id'");
        return $hasil;
    }

    function cek_login($username,$password){
		global $koneksi; 
		$uname = $username;
		$upass = $password;		
		$hasil = mysqli_query($koneksi,"select * from admin where username='$uname' and password=md5('$upass')");
		$cek = mysqli_num_rows($hasil);
		if($cek > 0 ){
            $query = mysqli_fetch_array($hasil);
            $_SESSION['no_id'] = $query['no_id'];
            $_SESSION['username'] = $query['username'];
            $_SESSION['role'] = $query['role'];
			return true;		
        }
		else {
			return false;
		}	
	}

    function top5 ($tablename){
        global $koneksi;
        $sql = "select * from $tablename ORDER BY stock DESC LIMIT 5";
        $hasil=mysqli_query($koneksi, $sql);
        return $hasil;
    }
?>