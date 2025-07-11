<?php
require 'inc/functions.php';
header('Content-Type: application/json');

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $data = json_decode(file_get_contents('php://input'), true);

    if ($data['action'] === 'create_order') {
        $userid = $data['userid'];
        $porosia = $data['porosia'];

        $porosiaid = shtoPorosi($userid);

        if ($porosiaid) {
            foreach ($porosia as $item) {
                $menyjaid = $item['menyjaid'];
                $cmimi = $item['cmimi'];

                $result = shtoPorosiDetalje($porosiaid, $menyjaid, $cmimi);

                if (!$result) {
                    echo json_encode(['success' => false]);
                    exit;
                }
            }
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    }
}
?>