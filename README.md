# Datagrid
- created for representing data in IS, CRMs, CMSs etc
- supports Symfony 4
- Pagination and other large-data features are in progress

# Usage
- Create DataSource ( can be array, or ArrayCollection )

##### Creating Grid from array 
```
use DataGrid\Grid;

$arr = [];

$arr[] = [
    "name" => "Username",
    "password" => "#23&[Đ",
];

$arr[] = [
    "name" => "Username2",
    "password" => "123456",
];    

$grid = Grid::fromArray($arr);
$grid->addColumn("name", "Username");
$grid->addColumn("password", "Password", "www.resetpassword.org");

echo $grid->render();
```
