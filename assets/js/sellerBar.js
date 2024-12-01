// console.log('nigga');

var islock = false;
const home = document.getElementById('home');
const profile = document.getElementById('profile');
const addProduct = document.getElementById('addProduct');
const productList = document.getElementById('productList');
const transaction = document.getElementById('transaction');
const logout = document.getElementById('logout');
const sidebarBtn = document.getElementById('menu-button');
const sidebarDiv = document.getElementById('sidebar');

function expandSidebar() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('.ml-16');

    const isExpanded = sidebar.getAttribute('data-expanded') === 'true';

    if (isExpanded) {
        home.innerHTML = "";
        profile.innerHTML = "";
        addProduct.innerHTML = "";
        productList.innerHTML = "";
        transaction.innerHTML = "";
        logout.innerHTML = "";
        islock = false;
        sidebar.style.width = '4rem';
        mainContent.style.marginLeft = '4rem';
        sidebar.classList.remove('text-left', 'px-6');
        sidebar.classList.add('text-center', 'px-0');
        sidebar.setAttribute('data-expanded', 'false');
    } else {
        home.innerHTML = "Home";
        profile.innerHTML = "Profile";
        addProduct.innerHTML = "Add Product";
        productList.innerHTML = "Product List";
        transaction.innerHTML = "Transaction";
        logout.innerHTML = "Logout";
        islock = true;
        sidebar.style.width = '16rem';
        mainContent.style.marginLeft = '16rem';
        sidebar.classList.add('text-left', 'px-6');
        sidebar.classList.remove('text-center', 'px-0');
        sidebar.setAttribute('data-expanded', 'true');
    }

    const labels = sidebar.querySelectorAll('span');
    labels.forEach(label => label.classList.toggle('opacity-0'));
}

function expandSidebarHover() {
    // console.log('nigga');
    if(islock!=true){
        home.innerHTML = "Home";
        profile.innerHTML = "Profile";
        addProduct.innerHTML = "Add Product";
        productList.innerHTML = "Product List";
        transaction.innerHTML = "Transaction";
        logout.innerHTML = "Logout";
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.querySelector('.ml-16');
        sidebar.style.width = '16rem';
        mainContent.style.marginLeft = '16rem';
        sidebar.classList.add('text-left', 'px-6');
        sidebar.classList.remove('text-center', 'px-0');
        sidebar.setAttribute('data-expanded', 'true');
        
        const labels = sidebar.querySelectorAll('span');
        labels.forEach(label => label.classList.remove('opacity-0'));
    }
}

function removeSidebarHover() {
    if(islock!=true){
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.querySelector('.ml-16');
        const isExpanded = sidebar.getAttribute('data-expanded') === 'true';
        
        if (isExpanded) {
            home.innerHTML = "";
            profile.innerHTML = "";
            addProduct.innerHTML = "";
            productList.innerHTML = "";
            transaction.innerHTML = "";
            logout.innerHTML = "";
            sidebar.style.width = '4rem';
            mainContent.style.marginLeft = '4rem';
            sidebar.classList.remove('text-left', 'px-6');
            sidebar.classList.add('text-center', 'px-0');
            sidebar.setAttribute('data-expanded', 'false');
            
            const labels = sidebar.querySelectorAll('span');
            labels.forEach(label => label.classList.add('opacity-0'));
        }
    }
}

sidebarBtn.addEventListener('click', expandSidebar);
sidebarDiv.addEventListener('mouseover', expandSidebarHover);
sidebarDiv.addEventListener('mouseleave', removeSidebarHover);