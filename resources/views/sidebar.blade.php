<div class="sidebar">
    <ul class="sidebar-menu">
        <li class="sidebar-logo">
            <a href="{{ route('home') }}" class="sidebar-link">
                <span class="logo">HK</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('home') }}" class="sidebar-link">
                <span class="icon">🏠</span>
                <span class="text">Home</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('customer.create') }}" class="sidebar-link">
                <span class="icon">👤</span>
                <span  class="text">Add Customer</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('transaction.create') }}" class="sidebar-link">
                <span class="icon">💰</span>
                <span  class="text">Add Transaction</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('customer.index') }}" class="sidebar-link">
                <span class="icon">👥</span>
                <span  class="text">Show Customer</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('transaction.index') }}" class="sidebar-link">
                <span class="icon">📊</span>
                <span  class="text">Show Transaction</span>
            </a>
        </li>
</div>

<style>
    .sidebar-menu {
        list-style: none;
        padding: 0;
        margin: 0;
        background-color: #f8f9fa;
        width: 250px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #f8f9fa;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        overflow-y: auto;
    }
    .sidebar-item {
        margin: 10px 0;

        border-radius: 4px;
        transition: background-color 0.3s;
        font-size: 32px;
        font-weight: bolder;
        width: 100%;
        box-sizing: border-box;
    }
    .sidebar-link {
        text-decoration: none;
        color: #333;
        display: flex;
        align-items: center;
        padding: 10px;
        font-size: 16px;
        font-weight: 500;
        transition: color 0.3s;
    }
    .sidebar-link:hover {
        color: #007bff;
    }
    .text {
        margin-left: 10px;
    }
    .icon {
        font-size: 24px;
        margin-right: 10px;
    }
    .sidebar-item:hover {
        background-color: #cccfd2;
    }
    .logo{
        font-size: 40px;
        font-weight: bold;
        color: #1f1e1e;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60px;
        width: 100%;
    }
    .sidebar-logo a {
        text-decoration: none;
        color: #1f1e1e;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60px;
        width: 100%;
        font-size: 24px;
    }
</style>
