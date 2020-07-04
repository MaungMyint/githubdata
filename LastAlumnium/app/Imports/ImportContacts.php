<?php

namespace App\Imports;

use App\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ImportContacts implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Contact([
            'no'     => @$row['no'],
            'mname'     => @$row['myanmarname'],
            'name'     => @$row['name'],
            'nrc'     => @$row['nrc'],
            'degree'    => @$row['degree'], 
            'major'    => @$row['major'], 
            'training' => @$row['training'], 
            'course'   => @$row['course'], 
            'phonenumber' => @$row['phonenumber'], 
            'gmail'    => @$row['email'],
            'address'   => @$row['address'],
           
        

            // return new Contact([
            //     'no'     => @$row[0],
            //     'mname'     => @$row[1],
            //     'name'     => @$row[2],
            //     'nrc'     => @$row[3],
            //     'degree'    => @$row[4], 
            //     'major'    => @$row[5], 
            //     'training' => @$row[6], 
            //     'course'   => @$row[7], 
            //     'phonenumber' => @$row[8], 
            //     'gmail'    => @$row[9],
            //     'address'   => @$row[10],
            //     'password'   => @$row[11],
            //     'image'   => @$row[12],
            //     'university' =>@$row[13],
            //     'staff' =>@$row[14],
            //     'jobposition' =>@$row[15],
            //     'joblocation' =>@$row[16],
            //     'slary' =>@$row[17],
            //     'state' =>@$row[18],
                
    
            // ]);

        ]);
    }
}
