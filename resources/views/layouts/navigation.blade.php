<nav x-data="{ open: false }">
   <aside class = "sidebar">
    <div class="sidebar-header">
        <div class="row">
            <div class="column">
                <img src="{{ asset('assets/images/nocs-logo.png') }}" alt="logo" class="logo-icon">
            </div>
            <div class="column">
                <img src="{{ asset('assets/images/logo-text.png') }}" alt="logo" class="logo-text">
            </div>
        </div>
       
        
    </div>
    <ul class = "sidebar-links">
        <li>
            <a href="#">
            <span class="material-symbols-outlined">
                dashboard
            </span>Dashboard</a>
        </li>
        <li>
            <a href="#">
            <span class="material-symbols-outlined">
                history
            </span>History</a>
        </li>
        <li>
            <a href="#">
            <span class="material-symbols-outlined">
                logout
            </span>Log out</a>
        </li>
    </ul>
    <div class="user-account">
        <div class="user-profile">
            <img src="{{ asset('assets/images/user-pic.png') }}" alt="profile-img">
            <div class="user-detail">
                <h3>
                    {{ Auth::user()->name }}
                </h3>
                <span>
                {{ Auth::user()->email }}
                </span>
            </div>
        </div>
    </div>
</nav>

<style>
    .sidebar{
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 95px;
        display: flex;
        flex-direction: column;
        overflow-x: hidden;
        overflow-y: hidden;
        background: #002351;
        padding: 30px 20px;
        border-radius: 0px 10px 10px 0px;
        transition: all 0.4s;
    }

    .sidebar:hover{
        width: 265px;
    }

    .row{
        display: flex;
    }

    .column{
        flex 10%;
        paddin: 5px;
    }


    .sidebar-header{
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
        margin-top: 1.5rem;
    }

    .sidebar-header img{
        width: 4.5rem;
    }

    .sidebar-header .column .logo-icon{
        margin-right: 25px;
    }

    .sidebar-header .column .logo-text{
        width: 10rem;
    }

    .sidebar-links{
        list-style: none;
        margin-top: 20px;
        height: 80%;
    }

    .sidebar-links li a{
        display: flex;
        align-items: center;
        gap: 0 20px;
        color: #fff;
        font-weight: 400;
        padding: 15px 20px;
        white-space: nowrap;
        text-decoration: none;
    }

    .sidebar-links li a:hover{
        background: #ffffff2d;
        color: #fff;
        border-radius: 4px;
    }

    .user-account{
        margin-top: auto;
        padding: 12px 10px;
        margin-left: -10px;
        overflow-x: hidden;
    }
    
    .user-account .user-profile{
        display: flex;
        align-items: center;
        color: #e5dede;
    }

    .user-profile img{
        width: 45px;
    }

    .user-profile h3{
        font-size: 1rem;
        font-weight: 600;
    }

    .user-profile span{
        font-size: 0.775rem;

    }

    .user-detail{
        margin-left: 10px;
        white-space: nowrap;
    }

    .sidebar:hover .user-account{
        background:  #ffffff2d;
        border-radius: 4px;

    }

 

</style>
