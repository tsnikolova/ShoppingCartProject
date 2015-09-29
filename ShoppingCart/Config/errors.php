<?php
use Constants\Codes;
$cnf[Codes::USERNAME.Codes::INVALID] = '��������� ������������� ���. ��������� �������� ����� � �����.';
$cnf[Codes::USERNAME.Codes::MIN_LENGTH] = '��������������� ��� ������ �� � ���� �� 3 �������.';
$cnf[Codes::USERNAME.Codes::EXIST] = '��������������� ��� � �����.';
$cnf[Codes::USERNAME.Codes::PASSWORD.Codes::WRONG] = '������ ��������������� ��� ��� ������.';
$cnf[Codes::PASSWORD.Codes::MIN_LENGTH] = '�������� ������ �� � ���� �� 5 �������.';
$cnf[Codes::PASSWORD.Codes::NOT_MATCH] = '�������� �� �������� ������.';
$cnf[Codes::EMAIL.Codes::INVALID] = '��������� email.';
$cnf[Codes::CATEGORIES . Codes::REQUIRED] = '�� � �������� ���������.';
return $cnf;