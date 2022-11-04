        <!doctype html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Praktikum Modul 2</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
          </head>
          <style>
            p { font-size: 14px;}
          </style>

        <body>
        <nav>
        <ul class="nav justify-content-center" style="background-color: black;">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="color:white">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="menu_booking.php" style="color:white">Booking</a>
            </li>
        </ul>
        </nav>

        <section>
          <p>&nbsp</p>
          <h5 align="center">Rent your car now !</h5>
          <p>&nbsp</p>
          <div class="container">
            <div class="row">
              <div class="col">
                <img src="Alphardd.png" class="card-img-top" alt="Toyota Alphard" style="width: 600px">
              </div>
              <div class="col">
                <form action="pembayarans.php" method="post">
                  <div class="mb-3">
                    <label for="nama" class="form-label">Name</label>
                    <input class="form-control" name="nama" type="text" value="BAGAS_1202201372" aria-label="readonly input example" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="date" class="form-label">Book Date</label>
                    <input type="date" id="date" name="date" class="form-control" placeholder="dd / mm / yyyy">
                  </div>
                  <div class="mb-3">
                    <label for="start" class="form-label">Start Time</label>
                    <input type="time" name ="time" id="time" class="form-control" placeholder="-- : -- --">
                  </div>
                  <div class="mb-3">
                    <label for="duration" class="form-label">Duration (Days)</label>
                    <input type="number" name="duration" id="duration" class="form-control" min="1">
                  </div>
                  <div class="mb-3">
                    <label for="car_type" class="form-label">Car Type</label>
                    <select id="car_type" name="car_type" class="form-select" aria-label="Default select example">
                        <option value="Toyota Alphard">Toyota Alphard</option>
                        <option value="Ferrari 458">Ferrari 458</option>
                        <option value="Toyota Supra">Toyota Supra</option>
                    </select>
                  </div>
                  <div class="mb-3">
                      <label for="nohp" class="form-label">Phone Number</label>
                      <input type="number" name="nohp" id="nohp" class="form-control" placeholder="">
                  </div>
                  <div class="mb-3">
                      <label for="service"> Add Service(s)</label>
                      <div class="form-check">
                        <input class="form-check-input" name="service" type="checkbox" value="Health Protocol" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Health Protocol / Rp25.000</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="service" type="checkbox" value="Driver" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">Driver / Rp100.000</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="service" type="checkbox" value="Fuel Filled" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">Fuel Filled / Rp250.000</label>
                      </div>
                      <div class="d-grid gap-2" style="margin-top : 20px;">
                          <input class="btn btn-success" type="submit" value="Book" name="Book">                      
                      </div>
                </div>
                </form>
            </div>
          <footer>
            <p>&nbsp</p>
            <p align="center" style="background-color: ghostwhite;">Created by BAGAS DISTYO UTOMO_1202201372</p>
          </footer>

        </section>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
          </body>
        </html>