<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Nilai Siswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="container">
        <h2>Form Nilai Siswa</h2>
        
        <form>
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="name" name="name" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="PW2">Pemrograman Web 2</option>
                    <option value="UI/UX">UI/UX</option>
                    <option value="JARKOM">Jaringan Komputer</option>
                    <option value="BASDAT">Basis Data</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="UTS" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="UTS" name="UTS" placeholder="Nilai UTS" min="0" max="100" type="number" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="UAS" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="UAS" name="UAS" placeholder="Nilai UAS" min="0" max="100" type="number" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="TUGAS" class="col-4 col-form-label">Nilai Tugas</label> 
                <div class="col-8">
                <input id="TUGAS" name="TUGAS" placeholder="Nilai Tugas" min="0" max="100" type="number" required="required" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>


    <?php
    if (isset($_GET['submit'])) {
    // Menangkap data input
    $name = $_GET['name'];
    $matkul = $_GET['matkul'];
    $UTS = $_GET['UTS'];
    $UAS = $_GET['UAS'];
    $TUGAS = $_GET['TUGAS'];
    
    echo "Nama Siswa : ". $name;
    echo "<br/>Mata Kuliah : ". $matkul;
    echo "<br/>Nilai UTS : ". $UTS;
    echo "<br/>Nilai UAS : ". $UAS;
    echo "<br/>Nilai Tugas : ". $TUGAS;
    }
    ?>
    </body>
</html>