import React from 'react'

function SideNav() {
  return (
    <div>
         <div class="header-left">
            <div class="logo">
                <img src="./logo.png" alt="img"/>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="" class="active">Home</a>
                    </li>
                    <li>
                        <a href="">Products</a>
                    </li>
                    <li>
                        <a href="">Pricing</a>
                    </li>
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Say, hi - info@virus.com</a>
                    </li>
                </ul>
                <div class="login-signup">
                    <a href="">Login</a> or <a href="">Signup</a>
                </div>
            </nav>
        </div>
        <div class="header-right">
            <div class="login-signup">
                <a href="">Login</a> or <a href="">Signup</a>
            </div>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
  )
}

export default SideNav