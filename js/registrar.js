// select
$(document).ready(function () {
  // cerveja
  $("#chamar_cerveja").click(function () {
    $.ajax({
      url: "ajax/select_cerveja.php",
      method: "GET",
      dataType: "json",
      success: function (data, status) {
        $("#receba_registro").html("");
        for (let i = 0; i < data.length; i++) {
          $("#receba_registro").append(`<tr>
          <td>${data[i][2]}</td>
          <td class="text-center"><input style="width: 80px;" type="text" placeholder="Qnt" class="btn btn-light"></td>
          <td class="text-end"></td>
      </tr>`);
        }
      },
      error: function (data, status) {
        alert(status);
      },
    });
  });
  // copao
  $("#chamar_copao").click(function () {
    $.ajax({
      url: "ajax/select_copao.php",
      method: "GET",
      dataType: "json",
      success: function (data, status) {
        $("#receba_registro").html("");
        for (let i = 0; i < data.length; i++) {
          $("#receba_registro").append(`<tr>
          <td>${data[i][2]}</td>
          <td class="text-center"><input style="width: 80px;" type="text" placeholder="Qnt" class="btn btn-light"></td>
          <td class="text-end"></td>
      </tr>`);
        }
      },
      error: function (data, status) {
        alert(status);
      },
    });
  });
  // refrigerante
  $("#chamar_refrigerante").click(function () {
    $.ajax({
      url: "ajax/select_refrigerante.php",
      method: "GET",
      dataType: "json",
      success: function (data, status) {
        $("#receba_registro").html("");
        for (let i = 0; i < data.length; i++) {
          $("#receba_registro").append(`<tr>
            <td>${data[i][2]}</td>
            <td class="text-center"><input style="width: 80px;" type="text" placeholder="Qnt" class="btn btn-light"></td>
            <td class="text-end"></td>
        </tr>`);
        }
      },
      error: function (data, status) {
        alert(status);
      },
    });
  });
  // combo
  $("#chamar_combo").click(function () {
    $.ajax({
      url: "ajax/select_combo.php",
      method: "GET",
      dataType: "json",
      success: function (data, status) {
        $("#receba_registro").html("");
        for (let i = 0; i < data.length; i++) {
          $("#receba_registro").append(`<tr>
            <td>${data[i][2]}</td>
            <td class="text-center"><input style="width: 80px;" type="text" placeholder="Qnt" class="btn btn-light"></td>
            <td class="text-end"></td>
        </tr>`);
        }
      },
      error: function (data, status) {
        alert(status);
      },
    });
  });
  // outros
  $("#chamar_outros").click(function () {
    $.ajax({
      url: "ajax/select_outros.php",
      method: "GET",
      dataType: "json",
      success: function (data, status) {
        $("#receba_registro").html("");
        for (let i = 0; i < data.length; i++) {
          $("#receba_registro").append(`<tr>
            <td>${data[i][2]}</td>
            <td class="text-center"><input onclick="pegar_id(${data[i][0]})" id="quantidade" style="width: 80px;" type="text" placeholder="Qnt" class="btn btn-light"></td>
            <td class="text-end"></td>
        </tr>`);
        }
      },
      error: function (data, status) {
        alert(status);
      },
    });
  });
  // update
  $("#enviar").click(function () {
    pegar_id(teste);
    let id = teste;
    let quantidade = $("#quantidade").val();
    $.ajax({
      url: "ajax/update_registrar.php",
      method: "GET",
      data: {
        id: id,
        quantidade: quantidade,
      },
      dataType: "json",
      success: function (data, status) {
        $("#receba_registro").html("");
      },
      error: function (data, status) {
        alert(status);
      },
    });
  });
});
function pegar_id(contador) {
  teste = contador;
}
