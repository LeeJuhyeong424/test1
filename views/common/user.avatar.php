<?php
function renderUserAvatar($userName, $userImagePath, $hasProfileImage) {
  $initial = mb_substr($userName ?? '', 0, 1, 'UTF-8');
  if ($hasProfileImage) {
    echo '<img src="' . htmlspecialchars($userImagePath) . '" class="h-8 w-8 rounded-full border" alt="프로필">';
  } else {
    echo '<div class="h-8 w-8 rounded-full bg-blue-500 text-white flex items-center justify-center text-sm font-bold">'
      . htmlspecialchars($initial ?: '?') .
    '</div>';
  }
}
?>
