// components/Layout.js
"use client"

import React, { useState } from 'react'

function Side() {
    const [menuOpen, setMenuOpen] = useState(false);

    const toggleMenu = () => {
      setMenuOpen(!menuOpen);
    };
  
    return (
      <div className="flex ">
        {/* Sidebar */}
        <div
          className={`fixed inset-y-0 left-0 w-64 bg-gray-900 transition-transform transform ${
            menuOpen ? 'translate-x-0' : '-translate-x-full'
          }`}
        >
          {/* Sidebar content goes here */}
          <nav className="p-4">
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
              {/* Add more menu items as needed */}
            </ul>
          </nav>
        </div>
  
        {/* Main content */}
        <div className="flex-1">
          <button
            className="lg:hidden p-4 bg-white-900 text-white"
            onClick={toggleMenu}
          >
            Menu
          </button>
          {/* <main className="p-4">{children}</main> */}
        </div>
      </div>
    );
}

export default Side