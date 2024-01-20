<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<?php
include("./connect.php"); // connection to db
error_reporting(0);




?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <title>Document</title>
    <style>
      body {
        background: linear-gradient(135deg, #6c757d, #343a40);
        color: #fff;
      }
      .head {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        margin-bottom: 12px;
      }
      .head h1 {
        font-size: 36px;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      }
      .card {
        padding: 20px;
        margin: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }
      .sec1 {
        background-color: rgba(206, 204, 204, 0.9);
        border-radius: 10px;
      }
      section {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
      }
      label {
        color: #000;
        font-weight: bold;
      }
      select.form-select,
      .form-check-label {
        color: #000;
      }
      .btn-secondary {
        background-color: #343a40;
        border-color: #343a40;
      }
      .btn-secondary:hover {
        background-color: #292d31;
        border-color: #292d31;
      }
      a {
        color: #fff;
        text-decoration: none;
      }
      button {
        width: 500px;
        margin-bottom: 10px;
      }
      @media (max-width: 1100px) {
        button {
          margin-bottom: 25px;
        }
      }

      @media (max-width: 600px) {
        .homebn {
          width: 400px;
        }
      }
    </style>
  </head>
  <body>
  <?php 

$sn = session_start();?>
    <script>
      function selectAllCheckboxes(source) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i] !== source) {
            checkboxes[i].checked = source.checked;
          }
        }
      }
    </script>
    <div class="head">
      <h1>Diploma Portal</h1>
    </div>

    <section>
      <div class="card" style="width: 70rem">
        <form
          class="row g-3 needs-validation"
          novalidate
          action="personal.php"
          method="post"
          class="sec1"
        >
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label"
              >Select Branch</label
            >
            <select
              class="form-select"
              id="validationCustom04"
              name="branch"
              required
            >
              <option>CS</option>
              <option>EC</option>
              <option>AU</option>
              <option>ME</option>
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
          </div>

          <div class="col-md-3">
            <label for="validationCustom04" class="form-label"
              >Select Syllabus</label
            >
            <select
              class="form-select"
              id="validationCustom04"
              required
              name="syllabus"
            >
              <option>C20</option>
              <option>C15</option>
            </select>
            <div class="invalid-feedback"></div>
          </div>
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label"
              >Select SEM</label
            >
            <select
              class="form-select"
              id="validationCustom04"
              required
              name="semester"
            >
              <option>1st Sem</option>
              <option>2nd Sem</option>
              <option>3rd Sem</option>
              <option>4th Sem</option>
              <option>5th Sem</option>
              <option>6th Sem</option>
            </select>
            <div class="invalid-feedback"></div>
          </div>
          <label for="form-check">Select Resources You Want</label>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="selectAll"
              onchange="selectAllCheckboxes(this)"
            />
            <label class="form-check-label" for="selectAll"> Select All </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="flexCheckDefault"
              name="c1"
              value="textbooks"
            />
            <label class="form-check-label" for="flexCheckDefault">
              Text Books
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="flexCheckChecked"
              checked
              name="c2"
              value="elearning"
            />
            <label class="form-check-label" for="flexCheckChecked">
              Learning Videos
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="modelqp"
              id="flexCheckDefault"
              name="c3"
            />
            <label class="form-check-label" for="flexCheckDefault">
              Model Question Papers
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="QP"
              id="flexCheckDefault"
              name="c4"
            />
            <label class="form-check-label" for="flexCheckDefault">
              Previous Year Question Paper
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="syllabus"
              id="flexCheckDefault"
              name="c5"
            />
            <label class="form-check-label" for="flexCheckDefault">
              Syllabus
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="notes"
              id="flexCheckDefault"
              name="c6"
            />
            <label class="form-check-label" for="flexCheckDefault">
              Related Contents - Notes
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="result"
              id="flexCheckDefault"
              name="c7"
            />
            <label class="form-check-label" for="flexCheckDefault">
              Result Link
            </label>
          </div>

          <!-- Form content here... -->

          <div
            class="col-12"
            style="
              display: inline-flex;
              justify-content: space-around;
              flex-wrap: wrap;
            "
          >
            <button class="btn btn-secondary" type="submit">Submit</button>
            <?php 

            if ($sn=$_SESSION['user']) {
              echo "<a href='index1.html'
            >
            <button class='btn btn-secondary homebn' type='button'>
              Home
            </button></a
          >";
              
              # code...
            } else {
              echo "<a href='index.php'
              >
              <button class='btn btn-secondary homebn' type='button'>
                Home
              </button></a
            >";
            
              
            }
            

            




            
            
            ?>
          </div>
        </form>
        <div
          class="col-12"
          style="display: inline-flex; justify-content: center; flex-wrap: wrap"
        ></div>
      </div>
    </section>

    <br />
    <br />

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
