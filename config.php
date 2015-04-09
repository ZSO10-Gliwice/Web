<?php

/*
 * Copyleft (ↄ) 2015 Marek Pikuła
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Basic database configuration constans
 * 
 * @author Marek Pikuła <marpirk@gmail.com>
 */
namespace Config\DB {
    
    /** Database hostname */
    define('Config\DB\host', 'localhost');
    /** Database connection port */
    define('Config\DB\port', '3306');
    /** Database user name */
    define('Config\DB\user', 'zso10app');
    /** Database password */
    define('Config\DB\password', 'fsadpass1029');
    /** Main ZSO10 App database name */
    define('Config\DB\database', 'zso10app');
    /**
     * Table name prefix.
     * 
     * For example: app_lucky
     */
    define('Config\DB\table_prefix', 'app_');
        
}