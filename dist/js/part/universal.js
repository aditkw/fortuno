// validform

function ucwords(str) {
  return (str + '').replace(/^([a-z])|[\s_]+([a-z])/g, function ($1) {
      return $1.toUpperCase();
  })
};

function validGa(text, element, pat, errClass, errText) {
  if (element === "input[name='c_name']") {
    text = ucwords(text);
    $("input[name='c_name']").val(text);
  }
  text = text.trim();
  let length_valid_err = $(element).parents(".form-valid").find("."+errClass).length;
  if(!pat.test(text) && !length_valid_err) {
    $(element).parent().after("<p class='valid_err "+errClass+" alert alert-danger'>" + errText + "</p>");
    let attr_focout = $(this).attr("onfocout");
    if (attr_focout !== "1") {
      $(element).attr("onfocout", "1");
    }
  } else if (pat.test(text)) {
    $(element).parents(".form-valid").find("."+errClass).remove();
  }
  $(element).val(text);
  return pat.test(text);
}

function validGa_name() {
  let c_name = $("input[name='c_name']").val();
  validGa(c_name, "input[name='c_name']", /^[a-zA-Z ]+$/i, "valid_err_name", "Please fill out this field with the correct format. Not using numbers or symbols");
}

function validGa_email() {
  let c_email = $("input[name='c_email']").val();
  validGa(c_email, "input[name='c_email']", /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i, "valid_err_email", "Please fill out this field with the correct format. Please use the appropriate email format");
}

function validGa_subject() {
  let c_subject = $("input[name='c_subject']").val();
  validGa(c_subject, "input[name='c_subject']", /^[^<>\\]+$/i, "valid_err_subject", "Please fill out this field with the correct format. Not using harmful symbols");
}

function validGa_message() {
  let c_message = $("textarea[name='c_message']").val();
  validGa(c_message, "textarea[name='c_message']", /^.+$/i, "valid_err_message", "Please fill out this field");
}

$(document).on("submit", ".form-valid", function(e) {
  let res_c_name = validGa_name();
  let res_c_email = validGa_email();
  let res_c_subject = validGa_subject();
  let res_c_message = validGa_message();
  if (!res_c_name || !res_c_email || !res_c_subject || !res_c_message) {
    e.preventDefault();
  }
});

$("input[name='c_name']").keyup(function() {
  let val = ucwords($(this).val());
  $(this).val(val);
  if ($(this).attr("onfocout") === "1") {
    validGa_name();
  }
});

$("input[name='c_email']").keyup(function() {
  if ($(this).attr("onfocout") === "1") {
    validGa_email();
  }
});

$("input[name='c_subject']").keyup(function() {
  if ($(this).attr("onfocout") === "1") {
    validGa_subject();
  }
});

$("textarea[name='c_message']").keyup(function() {
  if ($(this).attr("onfocout") === "1") {
    validGa_message();
  }
});

$("input[name='c_name']").focusout(function() {
  validGa_name();
});

$("input[name='c_email']").focusout(function() {
  validGa_email();
});

$("input[name='c_subject']").focusout(function() {
  validGa_subject();
});

$("textarea[name='c_message']").focusout(function() {
  validGa_message();
});
