<?php 
require '..\config.php';

$hasil = $mysqli->query("SELECT * FROM antrian WHERE status = 'approved'");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap Link CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="admin.css" />
    <title>Tabel Resiko</title>
  </head>
  <!-- Sidebar Section Start -->
  <body>
    <!-- Side Nav-->
    <div class="wrapper">
      <aside id="sidebar">
        <div class="d-flex">
          <button id="toggle-btn" type="button">
            <i class="bi bi-grid"></i>
          </button>
          <div class="sidebar-logo">
            <a href="#">Risk Management System</a>
          </div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="admindashboard.php" class="sidebar-link">
              <i class="bi bi-collection"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link has-dropdown collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#auth"
              aria-expanded="false"
              aria-controls="auth"
              ><i class="bi bi-list-task"></i>
              <span>Task</span>
            </a>
            <ul
              id="auth"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Lihat</a>
              </li>
              <li class="sidebar-item">
                <a href="tambah_a.php" class="sidebar-link">Register</a>
              </li>
              <li class="sidear-item">
                <a href="admintask.php"class ="sidebar-link">Manage</a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="sidebar-footer">
          <a href="../index.php" class="sidebar-link">
            <i class="bi bi-box-arrow-left"></i>
            <span>Logout</span>
          </a>
        </div>
      </aside>
      <!-- Sidebar Section End -->

      <!-- Main Content Start -->
      <div class="main">
        <nav class="navbar navbar-expand px-4 py-3">
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav ms-auto">
              <h3 class="fw-bold fs-4 mb-3" style="color:white">Tabel Resiko</h3>
            </ul>
          </div>
        </nav>
        <main class="content px-3 py-4">
            <div class="container-fluid">
                <div class="mb-3 mx-1">
                    <div class="row">
                        <div class="col-12">
                            <table>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kategori</th>
                                    <th>Lokasi</th>
                                    <th>Dampak</th>
                                    <th>Probabilitas</th>
                                    <th>Deskripsi</th>
                                    <th>Solusi</th>
                                    <th>Status Penyelesaian</th>
                                </tr>
                                <?php $i = 1 ?>
                                <?php while ($row = $hasil->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row['kategori'] ?></td>
                                        <td><?= $row['lokasi'] ?></td>
                                        <td><?= $row['tingkat'] ?></td>
                                        <td><?= $row['probabilitas'] ?></td>
                                        <td><?= $row['deskripsi'] ?></td>
                                        <td><?= $row['solusi'] ?></td>
                                        <td><?= $row['penyelesaian'] ?></td>
                                        <?php $i++; ?>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content -->

        <!--Footer-->
        <footer class="footer" id="bottom-part">
          <div class="container-fluid">
            <div class="row text-body-secondary">
              <div class="col-6 text-start">
                <a href="#" class="text-body-secondary">
                  <strong>Risk Management System</strong>
                </a>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- Main Content End -->
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="admin.js"></script>
  </body>
</html>
