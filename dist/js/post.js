$(document).ready(function () {
  $("#login").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "free-gems/ajaxs/auth/login.php",
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
  $("#register").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "ajaxs/auth/register.php",
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
  $("#verify").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "ajaxs/auth/verify.php",
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
      url: "free-gems/ajaxs/auth/changePass.php",
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
      url: "/nap-gems/apicard.php",
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

$(document).ready(function () {
  $("#addItem").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "ajaxs/action/addItem.php",
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
              window.location.reload();
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
  $(".settingItems").on("submit", function (e) {
    e.preventDefault();
    var form = $(this);
    var action = form.find(".actionField").val();
    var formData = new FormData(this);

    $.ajax({
      url:
        "ajaxs/action/" +
        (action === "save" ? "saveItem.php" : "deleteItem.php"),
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
              window.location.reload();
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

  $(".saveBtn").on("click", function () {
    $(this).closest("form").find(".actionField").val("save");
  });

  $(".deleteBtn").on("click", function () {
    $(this).closest("form").find(".actionField").val("delete");
  });
});

$(document).ready(function () {
  $("#editRcon").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "ajaxs/action/editRcon.php",
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
              window.location.reload();
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
