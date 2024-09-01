$(document).ready(function () {
    // Modal Tambah Data
    $(".tombolTambahData").on("click", function () {
      $("#judulModal").html("Tambah Data");
      $(".modal-footer button[type=submit]").html("Tambah");
      $(".modal-body form ").attr('action', 'http://localhost/mvc/public/web/tambah'); // URL untuk menambah data
    });
  
    // Modal Edit Data
    $(".tampilModalEdit").on("click", function () {
      $("#judulModal").html("Edit Data");
      $(".modal-footer button[type=submit]").html("Edit");
      $(".modal-body form ").attr('action', 'http://localhost/mvc/public/web/edit'); 
  
      const id = $(this).data("id");
  
      $.ajax({
        url: "http://localhost/mvc/public/web/getedit",
        data: { id: id },
        method: "post",
        dataType: "json",
        success: function (data) {
          $("#nama").val(data.nama);
          $("#jabatan").val(data.jabatan);
          $("#pengalaman").val(data.pengalaman);
          $("#umur").val(data.umur);
          $("#alamat").val(data.alamat);
          $("#kampus").val(data.kampus);
          $("#asal_daerah").val(data.asal_daerah);
          $("#id").val(data.id);
        }
      });
    });
  });
  