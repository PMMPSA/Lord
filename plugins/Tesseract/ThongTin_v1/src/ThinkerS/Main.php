<?php

namespace ThinkerS;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("[ThongTin] §aActivated!");
	}
	
	public function onDisable(){
		$this->getLogger()->info("[ThongTin] §cDisabled!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case "cachchoi":
			   $sender->sendMessage("§r§c■§a☆§6♤ §aHướng Dẫn Cách Chơi§e §6♤§a☆§c■");
			   $sender->sendMessage("§a● §bServer này thuộc thể loại (Insert)");
			   $sender->sendMessage("§a∘ §dNhấn vào NPC bạn muốn chơi");
			   $sender->sendMessage("§a● §fĐể biết các thông tin khác về cách mua đất (plot) hoặc thông tin tuyển dụng hãy dùng lệnh /muadat và /tuyendung để biết thêm thông tin! ");
			   $sender->sendMessage("§a● §6Chúc bạn chơi vui vẻ");
			   $sender->sendMessage("§e-------------------------");
			   return true;
			case "muadat":
			$sender->sendMessage("§r§c■§a☆§6♤ §aHướng Dẫn Mua Đất§e §6♤§a☆§c■");
			   $sender->sendMessage("§a∘ §bĐể qua khu plot xin hãy dùng lệnh /warp Plot nhé");
			   $sender->sendMessage("§a● §6Dùng lệnh /p auto để tự động tìm đất trống chưa ai mua");
			   $sender->sendMessage("§a●§f Mua đất bằng cách /p claim nhé");
			   $sender->sendMessage("§a●§d Thêm người giúp việc vào plot bằng cách /p addhelper (tên người chơi, còn nếu muốn xóa thì /p removehelper (tên người chơi đã thêm).");
			   $sender->sendMessage("§a●§e Các vật liệu xây dựng thì các bạn mua tại Shop nhé.");
			   $sender->sendMessage("§c--------------------------§r");
			   return true;
			case "tuyendung":
			   $sender->sendMessage("§r§c■§a☆§6♤ §aThông báo tuyển dụng -§b (ServerName)§e §6♤§a☆§c■");
			   $sender->sendMessage("§a♢§ePolice§a♢§r");
			   $sender->sendMessage("§a●§f Yêu cầu cần tuyển (Ghi Vào) Police.");
			   $sender->sendMessage("§a- §fPolice cần phải trên (Ghi Vào) tuổi");
			   $sender->sendMessage("§a- §fBiết cách quản member, mỗi ngày phải online liên tiếp suốt (Ghi vào) tiếng");
			   $sender->sendMessage("§a- §fTrong 1 tháng phải vote hơn (Ghi Vào). Nếu không vote đủ sẽ bị cắt");
			   $sender->sendMessage("§a- §fKhông troll member và tuân thủ đúng luật máy chủ");
			   $sender->sendMessage("§a- §fLương in-game của Police là (Ghi Vào)  Xu.");
			   $sender->sendMessage("§a♢§eHelper§a♢§r");
			   $sender->sendMessage("§a●§f Yêu cầu cần tuyển (Ghi Vào) Helper.");
			   $sender->sendMessage("§a-§f Helper cần phải trên (Ghi Vào) tuổi");
			   $sender->sendMessage("§a-§f Biết nhiều lệnh và biết cách giúp member");
			   $sender->sendMessage("§a-§f Mỗi ngày phải online xuyên suốt (Ghi Vào) tiếng");
			   $sender->sendMessage("§a-§f Trong 1 tháng phải vote hơn (Ghi Vào) lần, nếu không vote đủ sẽ bị cắt");
			   $sender->sendMessage("§a-§f Mức lương in-game của Helper là (Ghi Vào), Tuân thủ đúng luật server.");
			   $sender->sendMessage("§a♢§eBuilder§a♢");
			   $sender->sendMessage("§a●§f Yêu cầu cần tuyển (Ghi Vào) Builder.");
			   $sender->sendMessage("§a-§f Builder cần phải trên (Ghi Vào) tuổi");
			   $sender->sendMessage("§a-§f Không troll member, xây phải đẹp, xây theo lời của OP, Admin, Owner");
			   $sender->sendMessage("§a-§f Trong 1 tháng phải vote đủ (Ghi Vào) lần, nếu không đủ sẽ bị cắt");
			   $sender->sendMessage("§a-§f Mỗi ngày phải online xuyên suốt (Ghi Vào) tiếng");
			   $sender->sendMessage("Mức lương in-game của Builder là (Ghi Vào), tuân thủ đúng luật server.");
			   $sender->sendMessage("§a♢§eYouTuber§a♢§r");
			   $sender->sendMessage("§a-§f Dùng /ytber để biết chi tiết về cách làm YouTuber");
			   $sender->sendMessage("§c----------------------");
			   return true;
			case "ytber":
			   $sender->sendMessage("§r§c■§a☆§6♤ §aCách Làm YouTuber - Quyền Lợi§e §6♤§a☆§c■");
			   $sender->sendMessage("§a•§f Yêu cầu kênh youtube của bạn phải hơn (Ghi Vào) và phải hơn (Ghi Vào) views");
			   $sender->sendMessage("§a•§f Quay (Ghi Vào) videos về server hoặc (Ghi Vào) video livestream về server nhưng các video đó phải đạt hơn (Ghi Vào) views");
			   $sender->sendMessage("§a•§f Quay xong liên hệ facebook:§b bit.do/(Name)§f để nhận rank nhé");
			   $sender->sendMessage("§a■§b■§c■§d■§f■§e Quyền Lợi §f■§d■§c■§b■§a■");
			   $sender->sendMessage("§a•§f Được (Ghi Vào)");
			   $sender->sendMessage("§a•§f Mỗi tháng nhận (Ghi Vào) Xu");
			   $sender->sendMessage("§a■§b■§c■§d■§f■§e Hết§f ■§d■§c■§b■§a■");
			   return true;
			case "thongtin":
			   $sender->sendMessage("§a■§b■§c■§d■§f■§e Thông Tin - (ServerName)§f ■§d■§c■§b■§a■");
			   $sender->sendMessage("§a●§f Lobby Server IP: (Ghi Vào)");
			   $sender->sendMessage("§a●§e Server Port:§b (Ghi Vào)");
			   $sender->sendMessage("§a1. OP-Prison: Cuộc chiến giữ các tù nhân trong nhà tù");
			   $sender->sendMessage("§a2. SkyWars: Trận chiến trên bầu trời");
			   $sender->sendMessage("§b•§e Update Sau");
			   $sender->sendMessage("§a■§b■§c■§d■§f■§e Hết§f ■§d■§c■§b■§a■");
			   return true;
			case "ipallserver":
			   $sender->sendMessage("§a■§b■§c■§d■§f■§e IP và Port§f ■§d■§c■§b■§a■");
			   $sender->sendMessage("§b●§a Lobby:§e (Ghi Vào)§b Port:§e (Ghi Vào)");
			   $sender->sendMessage("§b●§a OP-Prison:§e (Ghi Vào)§b Port:§e (Ghi Vào)");
			   $sender->sendMessage("§b●§a SkyWars:§e (Ghi Vào)§b Port:§e (Ghi Vào).");
			   $sender->sendMessage("§b●§a Update Sau.");
			   $sender->sendMessage("§a■§b■§c■§d■§f■§e Hết§f ■§d■§c■§b■§a■");
			   return true;
			   default:
			   return false;
		}
	}
}