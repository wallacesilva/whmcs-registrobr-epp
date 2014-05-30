<?php
/*
Whois.php        PHP classes to conduct whois queries

Copyright (C)1999,2005 easyDNS Technologies Inc. & Mark Jeftovic

Maintained by David Saez

For the most recent version of this package visit:

http://www.phpwhois.org

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

if (!defined('__NICLINE_HANDLER__'))
    define('__NICLINE_HANDLER__', 1);

require_once('whois.parser.php');

class nicline_handler
    {
    function parse($data_str, $query)
        {
        $items = array(
                'owner' => 'Registrant:',
                'admin' => 'Administrative contact:',
                'tech' => 'Technical contact:',
                'domain.name' => 'Domain name:',
                'domain.nserver.' => 'Domain servers in listed order:',
                'domain.created' => 'Created:',
                'domain.expires' => 'Expires:',
                'domain.changed' => 'Last updated:'
                      );

        return easy_parser($data_str, $items, 'dmy');
        }
    }
?>