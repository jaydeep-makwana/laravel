let show_pass = document.getElementById("showPassword");
let pass = document.getElementById("password");
let c_pass = document.getElementById("cPassword");

show_pass.addEventListener('click', () => {
    if (pass.type == 'password') {
        pass.type = 'text';
        c_pass.type = 'text';
    } else {
        pass.type = 'password';
        c_pass.type = 'password';
    }
});