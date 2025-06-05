<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css-style/warehouse.css') }}">
    <link rel="stylesheet" href="{{ asset('css-style/public.css') }}">
    <title>ALAM</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-dark" style="background-color: #634832">
        <div class="container">
            <a class="navbar-brand fw-bold fs-2 " href="#">M MASYUD ALAM - 2211102253</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item home1">
                        <a class="nav-link active mx-3" aria-current="page" href="#home">Warehouse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-3" aria-current="page" href="#about">Pesanan masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-3" aria-current="page" href="#about">History</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Alert Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-5 pt-5" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-5 pt-5" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Table -->
    <div class="warehouse-table container-fluid mt-5 pt-5">
        <div class="container-btn-tambah">
            <button type="button" class="btn btn-tambah" data-bs-toggle="modal" data-bs-target="#ModalTambah">
                Tambah
            </button>
        </div>
        <table class="table">
            <thead>
                <tr class="head">
                    <th scope="col">Id</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($warehouses) && count($warehouses) > 0)
                    @foreach($warehouses as $item)
                    <tr data-id="{{ $item->id_stok }}">
                        <th scope="row">{{ $item->id_stok }}</th>
                        <td>
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama_barang }}" 
                                     style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>{{ $item->stok_tersedia }}</td>
                        <td class="aksi">
                            <button class="edit btn btn-sm btn-warning" 
                                    data-id="{{ $item->id_stok }}"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#ModalEdit">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="hapus btn btn-sm btn-danger" 
                                    data-id="{{ $item->id_stok }}">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data produk</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah-->
    <div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('warehouse.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Masukan Nama Produk</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" 
                                   id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}" required>
                            @error('nama_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Masukan Kategori</label>
                            <select class="form-select @error('kategori') is-invalid @enderror" 
                                    id="kategori" name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Makanan" {{ old('kategori') == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                                <option value="Minuman" {{ old('kategori') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                            </select>
                            @error('kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="harga" class="form-label">Masukan Harga</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" 
                                   id="harga" name="harga" value="{{ old('harga') }}" min="0" required>
                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="stok" class="form-label">Masukan Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" 
                                   id="stok" name="stok" value="{{ old('stok') }}" min="0" required>
                            @error('stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Masukan Gambar</label>
                            <input class="form-control @error('image') is-invalid @enderror" 
                                   type="file" id="image" name="image" accept="image/*">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_nama_barang" class="form-label">Masukan Nama Produk</label>
                            <input type="text" class="form-control" id="edit_nama_barang" name="nama_barang" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="edit_kategori" class="form-label">Masukan Kategori</label>
                            <select class="form-select" id="edit_kategori" name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="edit_harga" class="form-label">Masukan Harga</label>
                            <input type="number" class="form-control" id="edit_harga" name="harga" min="0" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="edit_stok" class="form-label">Masukan Stok</label>
                            <input type="number" class="form-control" id="edit_stok" name="stok" min="0" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="edit_image" class="form-label">Masukan Gambar</label>
                            <input class="form-control" type="file" id="edit_image" name="image" accept="image/*">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                        </div>
                        
                        <div class="mb-3" id="current_image">
                            <!-- Current image will be displayed here -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
        // Setup CSRF token for AJAX requests
        document.addEventListener('DOMContentLoaded', function() {
            // Set CSRF token for fetch requests
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Edit button click handler
            document.addEventListener('click', function(e) {
                if (e.target.closest('.edit')) {
                    const button = e.target.closest('.edit');
                    const id = button.getAttribute('data-id');
                    
                    // Show loading state
                    button.disabled = true;
                    button.innerHTML = '<i class="bi bi-hourglass-split"></i>';
                    
                    // Fetch data for editing
                    fetch(`/warehouse/${id}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            // Fill form with data
                            document.getElementById('edit_nama_barang').value = data.nama_barang || '';
                            document.getElementById('edit_kategori').value = data.kategori || '';
                            document.getElementById('edit_harga').value = data.harga || '';
                            document.getElementById('edit_stok').value = data.stok_tersedia || '';
                            
                            // Update form action
                            document.getElementById('editForm').action = `/warehouse/${id}`;
                            
                            // Show current image if exists
                            const currentImageDiv = document.getElementById('current_image');
                            if (data.image) {
                                currentImageDiv.innerHTML = `
                                    <label class="form-label">Gambar Saat Ini:</label><br>
                                    <img src="/storage/${data.image}" alt="${data.nama_barang}" 
                                         style="width: 100px; height: 100px; object-fit: cover; border-radius: 5px;">
                                `;
                            } else {
                                currentImageDiv.innerHTML = '<small class="text-muted">Tidak ada gambar saat ini</small>';
                            }
                            
                            // Reset button state
                            button.disabled = false;
                            button.innerHTML = '<i class="bi bi-pencil-square"></i>';
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Error loading data: ' + error.message);
                            
                            // Reset button state
                            button.disabled = false;
                            button.innerHTML = '<i class="bi bi-pencil-square"></i>';
                        });
                }
            });

            // Delete button click handler
            document.addEventListener('click', function(e) {
                if (e.target.closest('.hapus')) {
                    const button = e.target.closest('.hapus');
                    const id = button.getAttribute('data-id');
                    const row = button.closest('tr');
                    const productName = row.querySelector('td:nth-child(3)').textContent;
                    
                    if (confirm(`Apakah Anda yakin ingin menghapus produk "${productName}"?`)) {
                        // Show loading state
                        button.disabled = true;
                        button.innerHTML = '<i class="bi bi-hourglass-split"></i>';
                        
                        fetch(`/warehouse/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                                'Content-Type': 'application/json',
                            }
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.success) {
                                // Add fade out animation
                                row.style.transition = 'opacity 0.5s';
                                row.style.opacity = '0';
                                
                                setTimeout(() => {
                                    row.remove();
                                    
                                    // Check if table is empty
                                    const tbody = document.querySelector('tbody');
                                    if (tbody.children.length === 0) {
                                        tbody.innerHTML = '<tr><td colspan="7" class="text-center">Tidak ada data produk</td></tr>';
                                    }
                                }, 500);
                                
                                // Show success message
                                showAlert('success', data.success);
                            } else {
                                throw new Error(data.error || 'Unknown error occurred');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            showAlert('danger', 'Error deleting product: ' + error.message);
                            
                            // Reset button state
                            button.disabled = false;
                            button.innerHTML = '<i class="bi bi-trash"></i>';
                        });
                    }
                }
            });

            // Function to show alert messages
            function showAlert(type, message) {
                const alertDiv = document.createElement('div');
                alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
                alertDiv.style.position = 'fixed';
                alertDiv.style.top = '20px';
                alertDiv.style.right = '20px';
                alertDiv.style.zIndex = '9999';
                alertDiv.style.minWidth = '300px';
                alertDiv.innerHTML = `
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                `;
                
                document.body.appendChild(alertDiv);
                
                // Auto hide alert after 5 seconds
                setTimeout(() => {
                    if (alertDiv.parentNode) {
                        alertDiv.remove();
                    }
                }, 5000);
            }

            // Auto-hide session alerts after 5 seconds
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    if (alert.classList.contains('show')) {
                        const bsAlert = new bootstrap.Alert(alert);
                        bsAlert.close();
                    }
                });
            }, 5000);

            // Form validation for add modal
            const addForm = document.querySelector('#ModalTambah form');
            if (addForm) {
                addForm.addEventListener('submit', function(e) {
                    const submitBtn = this.querySelector('button[type="submit"]');
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menyimpan...';
                });
            }

            // Form validation for edit modal
            const editForm = document.getElementById('editForm');
            if (editForm) {
                editForm.addEventListener('submit', function(e) {
                    const submitBtn = this.querySelector('button[type="submit"]');
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menyimpan...';
                });
            }

            // Reset modal forms when closed
            document.getElementById('ModalTambah').addEventListener('hidden.bs.modal', function () {
                this.querySelector('form').reset();
                this.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
                this.querySelectorAll('.invalid-feedback').forEach(el => el.style.display = 'none');
            });

            document.getElementById('ModalEdit').addEventListener('hidden.bs.modal', function () {
                this.querySelector('form').reset();
                document.getElementById('current_image').innerHTML = '';
                this.querySelector('button[type="submit"]').disabled = false;
                this.querySelector('button[type="submit"]').innerHTML = 'Simpan';
            });
        });
    </script>

    <style>
        /* Additional custom styles */
        .warehouse-table {
            padding: 20px;
        }
        
        .container-btn-tambah {
            margin-bottom: 20px;
            text-align: right;
        }
        
        .btn-tambah {
            background-color: #634832;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        
        .btn-tambah:hover {
            background-color: #4a3426;
            color: white;
        }
        
        .table {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .table thead .head {
            background-color: #634832;
            color: white;
        }
        
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        .aksi .btn {
            margin: 0 2px;
        }
        
        .modal-content {
            border-radius: 10px;
        }
        
        .modal-header {
            background-color: #634832;
            color: white;
            border-radius: 10px 10px 0 0;
        }
        
        .modal-header .btn-close {
            filter: invert(1);
        }
        
        .btn-primary {
            background-color: #634832;
            border-color: #634832;
        }
        
        .btn-primary:hover {
            background-color: #4a3426;
            border-color: #4a3426;
        }
        
        .alert {
            border-radius: 10px;
        }
        
        @media (max-width: 768px) {
            .warehouse-table {
                padding: 10px;
            }
            
            .table {
                font-size: 14px;
            }
            
            .aksi .btn {
                padding: 5px 8px;
            }
        }
    </style>
</body>

</html>