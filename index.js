"use strict";contact_form.onsubmit=async t=>{t.preventDefault();let a=await fetch("some/url",{method:"POST",body:new FormData(contact_form)}),e=await a.json();alert(e.message)};
