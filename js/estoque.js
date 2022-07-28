// insert
$("#cadastrar").click(function () {
  let $nome = $("#nome").val();
  let $valor = $("#valor").val();
  let $qnt = $("#qnt").val();
  let $categ = $("#categ").val();
  if (
    $("#nome").val() == "" ||
    $("#valor").val() == "" ||
    $("#qnt").val() == "" ||
    $("#categ").val() == ""
  ) {
    $("#receba").html(
      `<div class="alert alert-light col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
      Preencha todos os campos !!! </div>`
    );
  } else {
    $.ajax({
      url: "ajax/insert_estoque.php",
      type: "GET",
      data: {
        nome: $nome,
        valor: $valor,
        qnt: $qnt,
        categ: $categ,
      },
      dataType: "json",
      success: function (dados, status) {
        $("#att_sel").html("");
        reset();
        att();
        $("#receba").html(
          `<div class="alert alert-primary col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
          Cadastrado !!! </div>`
        );
      },
    });
  }
});
// update
function atualizar() {
  let $id = id_selecionado;
  let $nome = $("#nome").val();
  let $valor = $("#valor").val();
  let $qnt = $("#qnt").val();
  let $categ = $("#categ").val();
  if (
    $("#nome").val() == "" ||
    $("#valor").val() == "" ||
    $("#qnt").val() == "" ||
    $("#categ").val() == ""
  ) {
    $("#atualizar").modal("hide");
    $("#receba").html(
      `<div class="alert alert-success col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
      Selecione algo para atualizar !!! </div>`
    );
  } else {
    $.ajax({
      url: "ajax/update_estoque.php",
      type: "GET",
      data: {
        id: $id,
        nome: $nome,
        valor: $valor,
        qnt: $qnt,
        categ: $categ,
      },
      dataType: "json",
      success: function (data, status) {
        $("#atualizar").modal("hide");
        reset();
        $("#att_sel").html("");
        att();
        $("#receba").html(
          `<div class="alert alert-success col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
          Atualizado !!! </div>`
        );
      },
      error: function (data, status) {
        alert(status);
      },
    });
  }
}
// delete
function deletar() {
  let id = id_selecionado;
  if (
    $("#nome").val() == "" ||
    $("#valor").val() == "" ||
    $("#qnt").val() == "" ||
    $("#categ").val() == ""
  ) {
    $("#deletar").modal("hide");
    $("#receba").html(
      `<div class="alert alert-danger col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
      Selecione algo para deletar !!! </div>`
    );
  } else {
    $.ajax({
      url: "ajax/delete_estoque.php",
      type: "GET",
      data: {
        id: id,
      },
      success: function (data, status) {
        $("#deletar").modal("hide");
        reset();
        $("#att_sel").html("");
        att();
        $("#receba").html(
          `<div class="alert alert-danger col-6 col-md-2 text-center mx-auto mt-5" 
          role="alert"> Deletado !!! </div>`
        );
      },
      error: function (data, status) {
        alert(status);
      },
    });
  }
}
// select
function att() {
  $.ajax({
    url: "ajax/select_estoque.php",
    method: "GET",
    dataType: "json",
    success: function (data, status) {
      for (let i = 0; i < data.length; i++) {
        $("#att_sel").append(`<tr onclick="selecionar(${data[i][0]})">
        <td>${data[i][2]}</td>                        
        <td>${data[i][3]}</td>     
        <td>${data[i][4]}</td> 
        </tr>`);
      }
    },
    error: function (data, status) {
      alert(status);
    },
  });
}
// selecionar
let id_selecionado = 0;
function selecionar(id) {
  let id_sel = id;
  $.ajax({
    url: "ajax/selecionar_estoque.php",
    method: "GET",
    data: {
      id: id_sel,
    },
    dataType: "json",
    success: function (data, status) {
      $("#nome").val(data[0][2]);
      $("#valor").val(data[0][3]);
      $("#qnt").val(data[0][4]);
      $("#categ").val(data[0][1]);
      id_selecionado = data[0][0];
    },
    error: function (data, status) {
      alert(status);
    },
  });
}
//
function reset() {
  $("#nome").val("");
  $("#valor").val("");
  $("#qnt").val("");
  $("#categ").val("");
}
