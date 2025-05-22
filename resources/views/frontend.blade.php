<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>5026231161 - Daftar Tugas</title>
  <style>
    :root {
      --primary: #fcfcfc;
      --accent: #4a4a67;
      --bg: #4a4a67;
      --card-bg: #000000;
      --text: #000000;
      --shadow: rgb(253, 253, 253);
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: var(--bg);
      margin: 0;
      padding: 2rem;
      color: var(--text);
    }

    h1 {
      text-align: center;
      color: var(--primary);
      margin-bottom: 2rem;
    }

    .container {
      max-width: 900px;
      margin: auto;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .card {
      background: var(--card-bg);
      padding: 1.5rem;
      border-radius: 1rem;
      box-shadow: 0 4px 12px var(--shadow);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h2 {
      color: var(--primary);
      margin-bottom: 1rem;
      font-size: 1.4rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .tugas-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .tugas-list li {
      margin-bottom: 0.5rem;
    }

    .tugas-list a {
      text-decoration: none;
      color: var(--primary);
      background-color: var(--accent);
      padding: 0.6rem 1rem;
      border-radius: 8px;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    .tugas-list a:hover {
      background-color: var(--primary);
      color: rgb(0, 0, 0);
    }

    @media (max-width: 600px) {
      body {
        padding: 1rem;
      }

      .card {
        padding: 1rem;
      }
    }
  </style>
</head>
<body>
  <h1>Daftar Tugas - 5026231161</h1>
  <div class="container">
    <div class="card">
      <h2>📘 Pertemuan 1</h2>
      <ul class="tugas-list">
        <li><a href="pertemuan1" target="_blank">pertemuan1</a></li>
      </ul>
    </div>

    <div class="card">
      <h2>📗 Pertemuan 3</h2>
      <ul class="tugas-list">
        <li><a href="pertemuan3/bootstrap1" target="_blank">bootstrap1</a></li>
        <li><a href="pertemuan3/Forms" target="_blank">Forms</a></li>
        <li><a href="pertemuan3/Transition" target="_blank">Transition</a></li>
      </ul>
    </div>

    <div class="card">
      <h2>📘 Pertemuan 4</h2>
      <ul class="tugas-list">
        <li><a href="pertemuan4" target="_blank">Hands On</a></li>
      </ul>
    </div>

    <div class="card">
      <h2>📗 Pertemuan 6</h2>
      <ul class="tugas-list">
        <li><a href="linktree" target="_blank">Tugas Linktree</a></li>
      </ul>
    </div>

    <div class="card">
      <h2>📘 Pertemuan 7</h2>
      <ul class="tugas-list">
        <li><a href="pertemuan7/js" target="_blank">JavaScript</a></li>
        <li><a href="pertemuan7/validasi" target="_blank">Validasi Form</a></li>
      </ul>
    </div>

    <div class="card">
      <h2>📝 Evaluasi Tengah Semester</h2>
      <ul class="tugas-list">
        <li><a href="ets" target="_blank">ETS</a></li>
      </ul>
    </div>
  </div>
</body>
</html>
