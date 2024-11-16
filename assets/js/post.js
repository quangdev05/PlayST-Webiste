$(document).ready(function () {
  $("#login").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "authme/login.php",
      type: "POST",
      dataType: "JSON",
      data: formData,
      contentType: false,
      processData: false,
      success: function (data) {
        if (data.status == "success") {
          swal(
            {
              title: "Thành công",
              type: "success",
              text: data.msg,
              confirmButtonColor: "#0CAF60",
            },
            function () {
              if (data.redirect) window.location = data.redirect;
            }
          );
        } else {
          swal({
            html: true,
            title: "Thất Bại",
            type: "error",
            text: data.msg,
            confirmButtonColor: "#0CAF60",
          });
        }
      },
    });
  });
});

$(document).ready(function () {
  $("#changepass").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "authme/changePass.php",
      type: "POST",
      dataType: "JSON",
      data: formData,
      contentType: false,
      processData: false,
      success: function (data) {
        if (data.status == "success") {
          swal(
            {
              title: "Thành công",
              type: "success",
              text: data.msg,
              confirmButtonColor: "#0CAF60",
            },
            function () {
              if (data.redirect) window.location = data.redirect;
            }
          );
        } else {
          swal({
            html: true,
            title: "Thất Bại",
            type: "error",
            text: data.msg,
            confirmButtonColor: "#0CAF60",
          });
        }
      },
    });
  });
});

$(document).ready(function () {
  $("#napThe").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "api/api-card.php",
      type: "POST",
      dataType: "JSON",
      data: formData,
      contentType: false,
      processData: false,
      success: function (data) {
        if (data.status == "success") {
          swal(
            {
              title: "Thành công",
              type: "success",
              text: data.msg,
              confirmButtonColor: "#0CAF60",
            },
            function () {
              if (data.redirect) window.location = data.redirect;
            }
          );
        } else {
          swal(
            {
              html: true,
              title: "Thất Bại",
              type: "error",
              text: data.msg,
              confirmButtonColor: "#0CAF60",
            },
            function () {
              if (data.redirect) window.location = data.redirect;
            }
          );
        }
      },
    });
  });
});
