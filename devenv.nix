{ pkgs, ... }:

{
  dotenv.enable = true;
  packages = [ pkgs.just pkgs.php82 pkgs.php82.packages.composer ];
}
