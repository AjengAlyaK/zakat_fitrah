<!DOCTYPE html>
<html lang="en">
<head>
<title>Laporan Distribusi Zakat Fitrah</title>
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
<body>
    <h3>Laporan Distribusi Zakat Fitrah</h3>
    <div class="table">
        <table>
        <thead>
            <tr>
            <th style="width: 1%">#</th>
            <th style="width: 20%">Kategori Mustahik</th>
            <th>Hak Beras</th>
            <th>Hak Uang</th>
            <th>Jumlah KK</th>
            <th>Total Beras</th>
            <th>Total Uang</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>{{$r1a}}</td>
                <td>{{$r1b}}</td>
                <td>{{$r1c}}</td>
                <td>{{$r1d}}</td>
                <td>{{$r1b * $r1d}}</td>
                <td>{{$r1c * $r1d}}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>{{$r2a}}</td>
                <td>{{$r2b}}</td>
                <td>{{$r2c}}</td>
                <td>{{$r2d}}</td>
                <td>{{$r2b * $r2d}}</td>
                <td>{{$r2c * $r2d}}</td>
            </tr>
            <tr>
                <td>3</td>
                <td>{{$r3a}}</td>
                <td>{{$r3b}}</td>
                <td>{{$r3c}}</td>
                <td>{{$r3d}}</td>
                <td>{{$r3b * $r3d}}</td>
                <td>{{$r3c * $r3d}}</td>
            </tr>
            <tr>
                <td>4</td>
                <td>{{$r5a}}</td>
                <td>{{$r5b}}</td>
                <td>{{$r5c}}</td>
                <td>{{$r5d}}</td>
                <td>{{$r5b * $r5d}}</td>
                <td>{{$r5c * $r5d}}</td>
            </tr>
            <tr>
                <td>5</td>
                <td>{{$r6a}}</td>
                <td>{{$r6b}}</td>
                <td>{{$r6c}}</td>
                <td>{{$r6d}}</td>
                <td>{{$r6b * $r6d}}</td>
                <td>{{$r6c * $r6d}}</td>
            </tr>
            <tr>
                <td>6</td>
                <td>{{$r7a}}</td>
                <td>{{$r7b}}</td>
                <td>{{$r7c}}</td>
                <td>{{$r7d}}</td>
                <td>{{$r7b * $r7d}}</td>
                <td>{{$r7c * $r7d}}</td>
            </tr>
            <tr>
                <td>7</td>
                <td>{{$r8a}}</td>
                <td>{{$r8b}}</td>
                <td>{{$r8c}}</td>
                <td>{{$r8d}}</td>
                <td>{{$r8b * $r8d}}</td>
                <td>{{$r8c * $r8d}}</td>
            </tr>
            <tr>
                <td></td>
                <td>Total</td>
                <td></td>
                <td></td>
                <td>{{$r1d + $r2d + $r3d + $r5d + $r6d + $r7d + $r8d}}</td>
                <td>{{($r1b * $r1d)+($r2b * $r2d)+($r3b * $r3d)+($r5b * $r5d)+($r6b * $r6d)+($r7b * $r7d)+($r8b * $r8d)}}</td>
                <td>{{($r1c * $r1d)+($r2c * $r2d)+($r3c * $r3d)+($r5c * $r5d)+($r6c * $r6d)+($r7c * $r7d)+($r8c * $r8d)}}</td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>
