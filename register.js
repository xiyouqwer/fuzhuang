/**
 * 显示注册成功弹窗
 */
function showSuccessModal() {
    const modal = document.getElementById('success-modal');
    modal.classList.remove('opacity-0', 'pointer-events-none');
    modal.querySelector('div').classList.remove('scale-95');
    modal.querySelector('div').classList.add('scale-100');
}

/**
 * 隐藏注册成功弹窗
 */
function hideSuccessModal() {
    const modal = document.getElementById('success-modal');
    modal.classList.add('opacity-0', 'pointer-events-none');
    modal.querySelector('div').classList.remove('scale-100');
    modal.querySelector('div').classList.add('scale-95');
}

/**
 * 清空注册表单字段
 */
function clearFormFields() {
    const form = document.getElementById('register-form');
    if (form) {
        form.reset();
    }
}

/**
 * 跳转到登录页面
 */
function goToLoginPage() {
    window.location.href = 'login.php';
}

// 绑定按钮事件
document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.getElementById('login-btn');
    if (loginBtn) {
        loginBtn.addEventListener('click', function() {
            hideSuccessModal();
            setTimeout(goToLoginPage, 300); // 等待动画完成后跳转
        });
    }
});