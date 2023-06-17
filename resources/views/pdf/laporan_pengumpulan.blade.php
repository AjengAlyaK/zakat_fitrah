<!DOCTYPE html>
<html lang="en">
<head>
<title>Laporan Pengumpulan Zakat Fitrah</title>
<style>

table, th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}
table {
    border-collapse: collapse;
    margin: auto;
}
h3{
    text-align: center;
    margin-left: 50px;
}
th{
    background-color: rgb(101, 101, 255)
}
</style>
</head>
    <h3>Laporan Pengumpulan Zakat</h3>
    <div class="table">
    <table>
        <thead>
            <tr>
                <th style="width: 20%">Total Muzakki</th>
                <th style="width: 20%">Total Jiwa</th>
                <th style="width: 20%">Total Beras</th>
                <th style="width: 20%">Total Uang</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$muzakki->count()}}</td>
                <td>{{$j_t}}</td>
                <td>{{$b_b}}</td>
                <td>{{$b_u}}</td> 
            </tr>
        </tbody>
    </table>
    </div>

</body>
</html>
